<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Only POST requests are allowed.']);
    exit;
}

$payload = json_decode(file_get_contents('php://input'), true);
if (!$payload || !isset($payload['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request payload.']);
    exit;
}

$message = trim($payload['message']);
$page = trim($payload['page'] ?? '');
$pageTitle = trim($payload['pageTitle'] ?? '');
$pageContent = trim($payload['pageContent'] ?? '');

if ($message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Message is required.']);
    exit;
}

// Load API key from environment or optional config file.
$apiKey = getenv('OPENAI_API_KEY');
$openaiConfigPath = __DIR__ . '/openai-config.php';
if (!$apiKey && file_exists($openaiConfigPath)) {
    require_once $openaiConfigPath;
    if (defined('OPENAI_API_KEY')) {
        $apiKey = OPENAI_API_KEY;
    }
}

if (!$apiKey) {
    // Fallback: Keyword-based chatbot responses when no API key is configured
    $responses = [
        'service' => "We offer Website Design & Development, Creative Branding, Video Production, Digital Marketing, SEO, and more. What service interests you?",
        'price|cost|budget' => "Pricing varies based on project scope. Contact us for a custom quote tailored to your needs.",
        'contact|phone|number' => "You can reach us at +91 7970509143 or fill the contact form above.",
        'portfolio|work|project' => "Check our Portfolio page to see our recent projects and case studies.",
        'about|company|who' => "Crown Technology is a creative tech company specializing in web development, branding, and video production.",
        'design|web design|website' => "We create modern, responsive websites that convert. Would you like to discuss your web project?",
        'video|production|editing' => "Professional video production for brands, events, and campaigns. Tell us about your video needs!",
        'marketing|seo|digital' => "We offer SEO, social media marketing, and digital growth strategies.",
        'team|members' => "Our talented team includes designers, developers, videographers, and strategists.",
        'hello|hi|hey|greetings' => "Hi! 👋 Welcome to Crown Technology. How can we help you today?",
        'thank|thanks|thankyou' => "You're welcome! Feel free to ask anything else.",
    ];

    $reply = "How can we assist you today? Ask about our services, pricing, portfolio, or anything else!";
    
    foreach ($responses as $keywords => $response) {
        $keywordArray = explode('|', $keywords);
        foreach ($keywordArray as $keyword) {
            if (stripos($message, $keyword) !== false) {
                $reply = $response;
                break 2;
            }
        }
    }

    echo json_encode(['answer' => $reply, 'source' => 'fallback']);
    exit;
}

$pageContext = trim(preg_replace('/\s+/', ' ', $pageContent));
if (mb_strlen($pageContext) > 3000) {
    $pageContext = mb_substr($pageContext, 0, 3000);
}

$systemPrompt = "You are Marya, the technical support assistant for Crown Technology. Answer only with professional IT and digital service guidance. Use the website context when available, and keep answers focused on web development, digital marketing, design, automation, SEO, app development, and related technical services. Do not answer unrelated personal, philosophical, religious, or general questions. If a question is outside these services, politely redirect to IT and service support. \n\nWebsite page: {$pageTitle} ({$page}).\n\nWebsite content context: {$pageContext}";

$messages = [
    ['role' => 'system', 'content' => $systemPrompt],
    ['role' => 'user', 'content' => $message],
];

$requestBody = json_encode([
    'model' => 'gpt-4o-mini',
    'messages' => $messages,
    'temperature' => 0.2,
    'max_tokens' => 600,
]);

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($response === false) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Communication with AI service failed.',
        'details' => $curlError
    ]);
    exit;
}

$responseData = json_decode($response, true);
if (!$responseData || !isset($responseData['choices'][0]['message']['content'])) {
    http_response_code(500);
    echo json_encode(['error' => 'Invalid response from OpenAI.', 'debug' => $responseData]);
    exit;
}

$resultText = trim($responseData['choices'][0]['message']['content']);

echo json_encode(['answer' => $resultText]);

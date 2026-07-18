<?php
// Include paths configuration
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/paths.php';
}

$openaiConfigPath = __DIR__ . '/openai-config.php';
$openaiConfigured = false;
if (getenv('OPENAI_API_KEY')) {
    $openaiConfigured = true;
} elseif (file_exists($openaiConfigPath)) {
    include_once $openaiConfigPath;
    if (defined('OPENAI_API_KEY') && OPENAI_API_KEY) {
        $openaiConfigured = true;
    }
}
?>
<!-- ============================= -->
<!-- MARYA AI CHATBOT -->
<!-- ============================= -->
<!--
  Purpose: AI-powered customer support chatbot
  Features: Lead capture, quote generation, smart routing to n8n
  Position: Fixed bottom-right corner
  Integration: n8n webhook for lead management
-->

<style>
/* ===== CHATBOT STYLES ===== */
body { position: relative; }

/* Floating Button */
#marya-btn {
  position: fixed;
  bottom: 25px;
  right: 25px;
  background: linear-gradient(135deg, #06b6d4 0%, #0ea5e9 100%);
  color: white;
  padding: 14px 18px;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(6, 182, 212, 0.35);
  z-index: 9998;
  font-weight: 600;
  font-size: 14px;
  border: none;
  transition: all 0.3s ease;
  font-family: 'Poppins', sans-serif;
}

#marya-btn:hover {
  transform: scale(1.1);
  box-shadow: 0 15px 40px rgba(6, 182, 212, 0.45);
}

/* Chat Container */
#marya-box {
  position: fixed;
  bottom: 90px;
  right: 25px;
  width: 380px;
  height: 550px;
  background: rgba(255, 255, 255, 0.98);
  backdrop-filter: blur(10px);
  border-radius: 20px;
  display: none;
  flex-direction: column;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.5);
  z-index: 9999;
  animation: slideUp 0.3s ease;
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Header */
#marya-header {
  background: linear-gradient(135deg, #06b6d4 0%, #0ea5e9 100%);
  color: white;
  padding: 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 600;
  font-size: 15px;
}

.controls span {
  margin-left: 12px;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  opacity: 0.9;
  transition: opacity 0.2s;
}

.controls span:hover {
  opacity: 1;
}

/* Messages Container */
#marya-messages {
  flex: 1;
  padding: 16px;
  overflow-y: auto;
  background: #f8f9fb;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

#marya-messages::-webkit-scrollbar {
  width: 8px; /* Slightly wider for better visibility */
}

#marya-messages::-webkit-scrollbar-track {
  background: rgba(15, 23, 42, 0.3); /* Dark, subtle, translucent track */
  border-radius: 10px; /* Match thumb radius */
}

#marya-messages::-webkit-scrollbar-thumb {
  background: linear-gradient(to bottom, #06b6d4, #0ea5e9); /* Cyan to Blue gradient */
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.1); /* Subtle white border */
}

#marya-messages::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(to bottom, #0ea5e9, #06b6d4); /* Invert gradient on hover for dynamic effect */
  border: 1px solid rgba(255, 255, 255, 0.3); /* More visible border on hover */
}

/* Message Styles */
.msg {
  padding: 12px 14px;
  border-radius: 14px;
  max-width: 85%;
  font-size: 14px;
  line-height: 1.4;
  word-wrap: break-word;
  animation: messageSlide 0.3s ease;
}

@keyframes messageSlide {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* User Message */
.msg.user {
  background: linear-gradient(135deg, #06b6d4 0%, #0ea5e9 100%);
  color: white;
  margin-left: auto;
  border-bottom-right-radius: 4px;
  box-shadow: 0 2px 8px rgba(6, 182, 212, 0.2);
}

/* Bot Message */
.msg.bot {
  background: #e2e8f0;
  color: #1e293b;
  margin-right: auto;
  border-bottom-left-radius: 4px;
}

/* Quick Buttons Section */
#quick-buttons {
  padding: 12px 16px;
  background: white;
  border-top: 1px solid #e2e8f0;
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.quick {
  background: white;
  border: 1px solid #cbd5e1;
  padding: 7px 12px;
  border-radius: 18px;
  cursor: pointer;
  font-size: 12px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  color: #475569;
  transition: all 0.2s;
}

.quick:hover {
  background: #f1f5f9;
  border-color: #06b6d4;
  color: #06b6d4;
}

/* Input Area */
#marya-input {
  display: flex;
  border-top: 1px solid #e2e8f0;
  background: white;
  gap: 0;
}

#marya-input input {
  flex: 1;
  padding: 12px 16px;
  border: none;
  outline: none;
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  color: #1e293b;
}

#marya-input input::placeholder {
  color: #94a3b8;
}

#marya-input button {
  background: linear-gradient(135deg, #06b6d4 0%, #0ea5e9 100%);
  color: white;
  border: none;
  padding: 12px 16px;
  cursor: pointer;
  font-weight: 600;
  transition: all 0.2s;
  font-family: 'Poppins', sans-serif;
}

#marya-input button:hover {
  opacity: 0.9;
}

#marya-input button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

/* Minimized State */
#marya-box.minimized {
  height: 60px !important;
}

#marya-box.minimized #marya-messages,
#marya-box.minimized #quick-buttons,
#marya-box.minimized #marya-input {
  display: none;
}

/* Typing Indicator */
.typing {
  display: flex;
  gap: 4px;
  padding: 12px 14px;
}

.typing span {
  width: 8px;
  height: 8px;
  background: #cbd5e1;
  border-radius: 50%;
  animation: typing 1.4s infinite;
}

.typing span:nth-child(2) {
  animation-delay: 0.2s;
}

.typing span:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes typing {
  0%, 60%, 100% {
    opacity: 0.5;
    transform: translateY(0);
  }
  30% {
    opacity: 1;
    transform: translateY(-10px);
  }
}

/* Mobile Responsive */
@media (max-width: 480px) {
  #marya-box {
    width: 90vw;
    height: 70vh;
    bottom: 80px;
    right: 5%;
    border-radius: 15px;
  }

  .msg {
    max-width: 90%;
    font-size: 13px;
  }

  #marya-btn {
    padding: 12px 16px;
    font-size: 13px;
  }
}
</style>

<div id="marya-btn">💬 Ask Marya</div>

<div id="marya-box">
  <div id="marya-header">
    <span>🤖 Marya AI Assistant</span>
    <div class="controls">
      <span onclick="minimizeChat()">−</span>
      <span onclick="closeChat()">✕</span>
    </div>
  </div>
  <?php if (! $openaiConfigured): ?>
    <div class="px-4 py-3 bg-yellow-100 text-yellow-900 text-xs border-t border-yellow-200">
      OpenAI API key not configured. Chat answers may be limited. Please use quote or service buttons.
    </div>
  <?php endif; ?>

  <div id="marya-messages">
    <div class="msg bot">Hi 👋 I'm Marya, your virtual assistant from CROWN TECHNOLOGY. I can help with quotes, services, pricing, or technology questions. How can I help you today?</div>
  </div>

  <div id="quick-buttons">
    <button class="quick" onclick="sendQuickMsg('Get Quote')">📋 Get Quote</button>
    <button class="quick" onclick="sendQuickMsg('Pricing')">💰 Pricing</button>
    <button class="quick" onclick="sendQuickMsg('Services')">🎯 Services</button>
    <button class="quick" onclick="sendQuickMsg('Contact Us')">📞 Contact</button>
    <button class="quick" onclick="sendQuickMsg('Send Quote')">✉️ Send Quote</button>
  </div>

  <div id="marya-input">
    <input id="msg" placeholder="Type your message..." />
    <button id="sendBtn" onclick="sendMsg()">➤</button>
  </div>
</div>

<script>
// ===== CHATBOT LOGIC =====
const OPENAI_CONFIGURED = <?php echo $openaiConfigured ? 'true' : 'false'; ?>;

// Get Elements
const btn = document.getElementById("marya-btn");
const box = document.getElementById("marya-box");
const messages = document.getElementById("marya-messages");
const input = document.getElementById("msg");
const sendBtn = document.getElementById("sendBtn");

// Global state
let lastMessageTime = 0;
let quoteState = null;
let leadData = { name: "", email: "", mobile: "", service: "" };

// Close Chat
window.closeChat = function() {
  if (box) box.style.display = "none";
};

// Minimize Chat
window.minimizeChat = function() {
  if (box) box.classList.toggle("minimized");
};

// Toggle Chat visibility
btn.onclick = function() {
  box.style.display = (box.style.display === "flex") ? "none" : "flex";
};

// Add Message to UI
window.addMsg = function(text, type) {
    const div = document.createElement("div");
    div.className = "msg " + type;
    div.innerText = text;
    messages.appendChild(div);
    setTimeout(() => {
      messages.scrollTop = messages.scrollHeight;
    }, 0);
  };

  // Typing Indicator
  window.showTyping = function() {
    const div = document.createElement("div");
    div.className = "msg bot typing";
    div.id = "typing";
    div.innerHTML = "<span></span><span></span><span></span>";
    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
  };

  window.removeTyping = function() {
    const t = document.getElementById("typing");
    if (t) t.remove();
  };

// Input Validation
window.validate = function(text, mode = "message") {
  if (!text.trim()) return "Message cannot be empty.";

  if (mode === "email") {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(text.trim()) ? null : "Please enter a valid email address.";
  }

  if (mode === "mobile") {
    const mobileRegex = /^\+?[0-9]{8,15}$/;
    return mobileRegex.test(text.trim()) ? null : "Please enter a valid mobile number (digits only).";
  }

  if (mode === "name") {
    return text.trim().length >= 2 ? null : "Please enter your name.";
  }

  if (mode === "service") {
    return text.trim().length >= 3 ? null : "Please describe the service you need.";
  }

  if (text.length < 2) return "Too short message.";
  if (text.length > 250) return "Message too long.";

  const now = Date.now();
  if (now - lastMessageTime < 400) return "Please wait a moment before sending again.";
  lastMessageTime = now;
  return null;
}

function startQuoteFlow() {
  quoteState = "name";
  leadData = { name: "", email: "", mobile: "", service: "" };
  input.placeholder = "Enter your full name";
  addMsg("📋 Great! Let's create your quote. What is your full name?", "bot");
}

function askNextQuoteStep() {
  switch (quoteState) {
    case "email":
      input.placeholder = "Enter your email address";
      addMsg("📧 Thanks! Now please enter your email.", "bot");
      break;
    case "mobile":
      input.placeholder = "Enter your mobile number";
      addMsg("📱 Almost done! Please type your mobile number.", "bot");
      break;
    case "service":
      input.placeholder = "What service do you need?";
      addMsg("🛠️ Please tell me which service you'd like: website, app, design, marketing, etc.", "bot");
      break;
    case "confirm":
      showQuoteSummary();
      break;
    default:
      input.placeholder = "Type your message...";
      break;
  }
}

function processQuoteResponse(text) {
  const value = text.trim();
  let error = validate(value, quoteState);
  if (error) {
    addMsg("⚠️ " + error, "bot");
    return;
  }

  if (quoteState === "name") {
    leadData.name = value;
    quoteState = "email";
    askNextQuoteStep();
    return;
  }

  if (quoteState === "email") {
    leadData.email = value;
    quoteState = "mobile";
    askNextQuoteStep();
    return;
  }

  if (quoteState === "mobile") {
    leadData.mobile = value;
    quoteState = "service";
    askNextQuoteStep();
    return;
  }

  if (quoteState === "service") {
    leadData.service = value;
    quoteState = "confirm";
    askNextQuoteStep();
    return;
  }
}

function showQuoteSummary() {
  const summary = `Name: ${leadData.name}\nEmail: ${leadData.email}\nMobile: ${leadData.mobile}\nService: ${leadData.service}`;
  addMsg(
    `✅ Quote details captured!\n\n${summary}\n\nIf everything is correct, type 'Send Quote' or click the Send Quote button.`,
    "bot"
  );
  input.placeholder = "Type Send Quote to submit";
}

function submitQuoteRequest() {
  if (!leadData.name || !leadData.email || !leadData.mobile || !leadData.service) {
    addMsg("⚠️ Please complete all quote details first.", "bot");
    quoteState = quoteState || "name";
    askNextQuoteStep();
    return;
  }

  addMsg("📨 Sending your quote request now. Our team will review it and get back to you shortly.", "bot");
  sendToN8N({
    type: "quote_request",
    name: leadData.name,
    email: leadData.email,
    mobile: leadData.mobile,
    service: leadData.service,
    message: `Quote request for ${leadData.service}`,
    page: window.location.pathname,
    timestamp: new Date().toLocaleString()
  });
  quoteState = null;
  input.placeholder = "Type your message...";
}

// Bot Logic
function botLogic(text) {
  const lower = text.toLowerCase();

  if (lower.includes("naam") || lower.includes("aapka naam") || lower.includes("tumhara naam") || lower.includes("aapka naam kya hai") || lower.includes("tumhara naam kya hai") || lower.includes("naam kya hai")) {
    return {
      reply: "मेरा नाम Marya है। मैं CROWN TECHNOLOGY की वर्चुअल असिस्टेंट हूँ। मैं आपकी मदद के लिए यहाँ हूँ। 😊"
    };
  }

  if (lower.includes("marya")) {
    return {
      reply: "Yes! I'm Marya, your friendly assistant at CROWN TECHNOLOGY. I'm here to help you with services, quotes, pricing, and technology questions. 😊"
    };
  }

  if (lower.includes("kya haal") || lower.includes("kaise ho") || lower.includes("kaise hai") || lower.includes("kaise aap")) {
    return {
      reply: "I'm doing great, thank you! I'm always ready to help you with your next digital project. How can I support you today?"
    };
  }

  if (lower.includes("status") || lower.includes("haal chal") || lower.includes("update")) {
    return {
      reply: "I'm online and available right now. I can help you get a quote, explain our services, or answer questions about technology and automation."
    };
  }

  if (lower.includes("automation") || lower.includes("aut technology") || lower.includes("automate") || lower.includes("ai")) {
    return {
      reply: "Automation and AI help businesses save time, reduce errors, and grow faster. At CROWN TECHNOLOGY, we build smart solutions using web apps, mobile apps, and digital marketing tools to automate tasks and improve customer experience."
    };
  }

  if (lower.includes("send quote") || lower.includes("submit quote") || lower.includes("quotation send")) {
    if (quoteState === "confirm") {
      submitQuoteRequest();
      return { reply: null };
    }
    startQuoteFlow();
    return { reply: null };
  }

  if (lower.includes("quote") || lower.includes("quotation") || lower.includes("get quote") || lower.includes("share details")) {
    return { type: "quote" };
  }

  if (lower.includes("pricing") || lower.includes("price") || lower.includes("cost")) {
    return {
      reply: "💰 Our Pricing:\n\n🌐 Website Development: ₹10,000+\n📱 Mobile App: ₹15,000+\n🎨 Graphic Design: ₹5,000+\n📊 SEO Services: ₹5,000/month\n📹 Video Production: ₹20,000+\n\nNeed a custom quote? Click Get Quote or type 'Send Quote'."
    };
  }

  if (lower.includes("service") || lower.includes("what do you do") || lower.includes("what services") || lower.includes("kaam")) {
    return {
      reply: "🎯 Our Services:\n\n✓ Website Design & Development\n✓ Mobile App Development\n✓ Graphic Design & Branding\n✓ Video Production\n✓ Digital Marketing\n✓ SEO Optimization\n✓ AI & Automation Solutions\n\nYou can also click Get Quote to share your details instantly."
    };
  }

  if (lower.includes("contact") || lower.includes("phone") || lower.includes("email")) {
    return {
      reply: "📞 Contact Us:\n\n📱 Phone: +91 7970509143\n📧 Email: info@crowntechnology.com\n🌐 Website: www.crowntechnology.com\n📍 Available 24/7 for support!"
    };
  }

  if (lower.includes("hello") || lower.includes("hi") || lower.includes("hey")) {
    return { reply: "👋 Hey there! I can help with pricing, services, or quotes. Want me to collect your name, email, mobile and service details?" };
  }

  if (lower.includes("thanks") || lower.includes("thank you")) {
    return { reply: "😊 You're welcome! Anything else I can help with?" };
  }

  return { type: "ai" };
}

// Send Message
window.sendMsg = function(textParam = null) {
  const messageText = textParam || input.value.trim();
  if (!messageText) return;

  const currentMode = quoteState || "message";
  const error = validate(messageText, currentMode);

  if (error) {
    addMsg("⚠️ " + error, "bot");
    return;
  }

  addMsg(messageText, "user");
  input.value = "";
  sendBtn.disabled = true;

  if (quoteState) {
    processQuoteResponse(messageText);
    sendBtn.disabled = false;
    return;
  }

  const logic = botLogic(messageText);
  if (logic.type === "quote") {
    startQuoteFlow();
    sendBtn.disabled = false;
    return;
  }

  if (logic.type === "ai") {
    if (!OPENAI_CONFIGURED) {
      addMsg("⚠️ AI service is not configured on this website. Please ask about our services, pricing, or send a quote request.", "bot");
      sendBtn.disabled = false;
      return;
    }
    showTyping();
    sendToOpenAI(messageText)
      .then(answer => {
        removeTyping();
        addMsg(answer, "bot");
      })
      .catch(error => {
        removeTyping();
        console.error(error);
        addMsg(getFallbackReply(messageText), "bot");
      })
      .finally(() => {
        sendBtn.disabled = false;
      });
    return;
  }

  if (logic.reply === null) {
    sendBtn.disabled = false;
    return;
  }

  showTyping();
  setTimeout(() => {
    removeTyping();
    addMsg(logic.reply, "bot");
    sendBtn.disabled = false;
  }, 800 + Math.random() * 600);
}

async function sendToOpenAI(message) {
  const pageContent = getPageContext();
  const response = await fetch('/crowntechnology-backup/src/config/chatbot-api.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      message,
      page: window.location.pathname,
      pageTitle: document.title,
      pageContent
    })
  });

  if (!response.ok) {
    const errorData = await response.json().catch(() => null);
    throw new Error(errorData?.error || 'Chatbot API request failed');
  }

  const data = await response.json();
  if (data.error) {
    throw new Error(data.error);
  }

  return data.answer || 'I could not get a response right now. Please try again.';
}

function getFallbackReply(message) {
  const lower = message.toLowerCase();
  if (lower.includes('quote') || lower.includes('pricing') || lower.includes('service') || lower.includes('contact')) {
    return 'I am unable to connect to the AI service right now, but I can still help with quotes, pricing, services, or contact information. Please try one of those options again.';
  }
  return 'I could not connect to the AI service at the moment. Please ask about our services, pricing, or request a quote, and I will do my best to help.';
}

function getPageContext() {
  const clone = document.body.cloneNode(true);
  const chatBox = clone.querySelector('#marya-box');
  if (chatBox) {
    chatBox.remove();
  }
  const text = clone.innerText.replace(/\s+/g, ' ').trim();
  return text.slice(0, 3000);
}

// Send Quick Message
window.sendQuickMsg = function(text) {
  if (text === "Send Quote") {
    if (quoteState === "confirm") {
      submitQuoteRequest();
      return;
    }
    startQuoteFlow();
    return;
  }
  input.value = text;
  sendMsg(text);
}

// Send to n8n (Lead Capture)
function sendToN8N(payload) {
  const data = {
    ...payload,
    page: window.location.pathname,
    timestamp: new Date().toLocaleString()
  };

  const webhookURL = "https://n8n-1hci.srv1133625.hstgr.cloud/webhook-test/chatbot-lead";

  fetch(webhookURL, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  }).catch(() => console.log("Lead saved (offline mode)"));
}

// Enter key to send
input.addEventListener("keypress", function(e) {
  if (e.key === "Enter" && !sendBtn.disabled) {
    sendMsg();
  }
});

// Keep chat active on interaction
let inactivityTimer;
function resetInactivityTimer() {
  clearTimeout(inactivityTimer);
  inactivityTimer = setTimeout(() => {
    /* optional inactivity behavior */
  }, 300000);
}

function initChatbot() {
  messages.addEventListener("mouseenter", resetInactivityTimer);
  input.addEventListener("focus", resetInactivityTimer);
}

// Initialize chatbot when DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initChatbot);
} else {
  initChatbot();
}
</script>

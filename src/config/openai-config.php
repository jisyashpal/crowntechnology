<?php
// OpenAI configuration.
// Copy this file to a local version and set your API key there.
// Do not commit your API key to public repositories.

// Use environment variables to keep your keys secure
define('OPENAI_API_KEY', getenv('OPENAI_API_KEY') ?: 'YOUR_API_KEY_HERE');

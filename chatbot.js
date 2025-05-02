const chatbotBox = document.getElementById('chatbox-container');
const chatbotMessages = document.getElementById('chatbox-messages');

function toggleChatbot() {
  chatbotBox.style.display = chatbotBox.style.display === 'flex' ? 'none' : 'flex';
}

// Add a message to the chat window
function addChatMessage(text, sender) {
  const msg = document.createElement('div');
  msg.className = sender;
  msg.textContent = text;
  chatbotMessages.appendChild(msg);
  chatbotMessages.scrollTop = chatbotMessages.scrollHeight;  // Auto scroll to bottom
}

// Handle sending a chat message
function sendChat() {
  const input = document.getElementById('chatbot-input');
  const text = input.value.trim();

  if (!text) return;  // Don't send if input is empty
  
  addChatMessage(text, 'user');  // Display user's message
  input.value = '';  // Clear input field
  respondToUser(text);  // Get bot's response
}

// Generate response based on the user's message
function respondToUser(message) {
  let response = "I'm here to help with career questions!";  // Default response
  const msg = message.toLowerCase();

  // Check for keywords in user message and respond accordingly
  if (msg.includes("10th")) {
    response = "After 10th, consider Science, Commerce, or Arts based on your interest.";
  } else if (msg.includes("12th")) {
    response = "After 12th, you can pursue Engineering, MBBS, BCom, BBA, etc.";
  } else if (msg.includes("engineering")) {
    response = "After engineering, options include GATE, MBA, jobs, etc.";
  } else if (msg.includes("exam")) {
    response = "Consider JEE, NEET, UPSC, MPSC, GATE based on your goal.";
  } else if (msg.includes("career")) {
    response = "Tell me more about your interests or what you enjoy doing.";
  }

  setTimeout(() => addChatMessage(response, 'bot'), 500);  // Delay before bot response
}

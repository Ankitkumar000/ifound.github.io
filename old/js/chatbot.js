// Get elements from the DOM
const chatWidget = document.getElementById('chat-widget');
const chatHeader = document.getElementById('chat-header');
const chatCloseBtn = document.getElementById('chat-close-btn');
const chatMinimizeBtn = document.getElementById('chat-minimize-btn');
const chatBody = document.getElementById('chat-body');
const chatMessages = document.getElementById('chat-messages');
const chatForm = document.getElementById('chat-form');
const chatInput = document.getElementById('chat-input');
const chatSubmitBtn = document.getElementById('chat-submit-btn');

// Set default message for greeting
const defaultGreeting = 'Hello, how can I help you today?';

// Set initial state of chat widget
let isMinimized = false;

// Add event listener to close button
chatCloseBtn.addEventListener('click', () => {
  chatWidget.style.display = 'none';
});

// Add event listener to minimize button
chatMinimizeBtn.addEventListener('click', () => {
  isMinimized = !isMinimized;
  if (isMinimized) {
    chatBody.style.display = 'none';
    chatMinimizeBtn.textContent = '+';
  } else {
    chatBody.style.display = 'block';
    chatMinimizeBtn.textContent = '-';
  }
});

// Function to add a new message to the chat
function addMessage(message, isUser) {
  const li = document.createElement('li');
  if (isUser) {
    li.innerHTML = `<strong>You:</strong> ${message}`;
    li.classList.add('user');
  } else {
    li.innerHTML = `<strong>Chat Bot:</strong> ${message}`;
    li.classList.add('bot');
  }
  chatMessages.appendChild(li);
  // Scroll to the bottom of the chat messages
  chatBody.scrollTop = chatBody.scrollHeight;
}

// Function to handle user input
function handleInput(event) {
  event.preventDefault();
  const inputText = chatInput.value.trim();
  if (inputText !== '') {
    addMessage(inputText, true);
    chatInput.value = '';
    // Handle user input here and generate a response
    const responseText = 'I received your message: ' + inputText;
    addMessage(responseText, false);
  }
}

// Set default greeting message
addMessage(defaultGreeting, false);

// Add event listener to form submit button
chatForm.addEventListener('submit', handleInput);

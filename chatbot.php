<?php
// Simple Chatbot Component
?>
<div class="chatbot-widget" id="chatbotWidget">
    <style>
        .chatbot-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            width: 350px;
            max-width: calc(100vw - 40px);
            height: 500px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        .chatbot-widget.active {
            display: flex;
        }

        .chatbot-header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chatbot-header h3 {
            margin: 0;
            font-size: 1.1rem;
        }

        .chatbot-close {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chatbot-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f8f9fa;
        }

        .message {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .message.bot {
            flex-direction: row;
        }

        .message.user {
            flex-direction: row-reverse;
        }

        .message-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .message.bot .message-avatar {
            background: #228B22;
            color: white;
        }

        .message.user .message-avatar {
            background: #e0e0e0;
            color: #333;
        }

        .message-content {
            max-width: 70%;
            padding: 12px 15px;
            border-radius: 18px;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .message.bot .message-content {
            background: white;
            color: #333;
            border-bottom-left-radius: 4px;
        }

        .message.user .message-content {
            background: #228B22;
            color: white;
            border-bottom-right-radius: 4px;
        }

        .chatbot-input-area {
            padding: 15px;
            border-top: 1px solid #e0e0e0;
            display: flex;
            gap: 10px;
        }

        .chatbot-input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            font-size: 0.9rem;
            outline: none;
        }

        .chatbot-input:focus {
            border-color: #228B22;
        }

        .chatbot-send {
            background: #228B22;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .chatbot-send:hover {
            background: #32CD32;
        }

        .chatbot-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            z-index: 999;
            transition: transform 0.3s ease;
        }

        .chatbot-toggle:hover {
            transform: scale(1.1);
        }

        .chatbot-widget.active ~ .chatbot-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .chatbot-widget {
                width: calc(100vw - 20px);
                height: calc(100vh - 40px);
                bottom: 10px;
                right: 10px;
            }
        }
    </style>

    <div class="chatbot-header">
        <h3>💬 Bantuan MDKM</h3>
        <button class="chatbot-close" onclick="toggleChatbot()">✕</button>
    </div>

    <div class="chatbot-messages" id="chatbotMessages">
        <div class="message bot">
            <div class="message-avatar">🤖</div>
            <div class="message-content">
                Selamat datang! Saya boleh membantu anda dengan maklumat tentang perkhidmatan MDKM. Bagaimana saya boleh membantu?
            </div>
        </div>
    </div>

    <div class="chatbot-input-area">
        <input type="text" class="chatbot-input" id="chatbotInput" placeholder="Tulis mesej anda..." onkeypress="handleChatKeypress(event)">
        <button class="chatbot-send" onclick="sendMessage()">Hantar</button>
    </div>
</div>

<button class="chatbot-toggle" onclick="toggleChatbot()" aria-label="Buka Chatbot">💬</button>

<script>
    const chatbotResponses = {
        'hello': 'Hello! Bagaimana saya boleh membantu anda hari ini?',
        'halo': 'Halo! Saya di sini untuk membantu. Ada apa yang boleh saya bantu?',
        'perkhidmatan': 'Kami menawarkan pelbagai perkhidmatan termasuk:\n• Perkhidmatan Awam\n• Pembangunan Bandar\n• Perkhidmatan Sosial\n\nSila lawati laman web untuk maklumat lanjut.',
        'waktu': 'Waktu operasi pejabat MDKM:\nIsnin - Jumaat: 8:00 pagi - 5:00 petang\nSabtu: 8:00 pagi - 1:00 tengah hari\nAhad: Tutup',
        'lokasi': 'Pejabat MDKM terletak di Kota Marudu, Sabah. Sila layari laman Hubungi Kami untuk maklumat lokasi terperinci.',
        'cukai': 'Untuk maklumat mengenai cukai taksiran, sila hubungi Bahagian Kewangan di talian yang tertera dalam direktori.',
        'lesen': 'Untuk permohonan lesen perniagaan, sila hubungi Bahagian Pentadbiran atau lawati kaunter perkhidmatan.',
        'default': 'Maaf, saya tidak faham soalan anda. Sila cuba soalan lain atau hubungi kami melalui borang maklum balas.'
    };

    function toggleChatbot() {
        const widget = document.getElementById('chatbotWidget');
        widget.classList.toggle('active');
        if (widget.classList.contains('active')) {
            document.getElementById('chatbotInput').focus();
        }
    }

    function sendMessage() {
        const input = document.getElementById('chatbotInput');
        const message = input.value.trim().toLowerCase();
        
        if (!message) return;

        // Add user message
        addMessage(message, 'user');
        input.value = '';

        // Get bot response
        setTimeout(() => {
            const response = getBotResponse(message);
            addMessage(response, 'bot');
        }, 500);
    }

    function addMessage(text, type) {
        const messages = document.getElementById('chatbotMessages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}`;
        
        const avatar = type === 'bot' ? '🤖' : '👤';
        messageDiv.innerHTML = `
            <div class="message-avatar">${avatar}</div>
            <div class="message-content">${text}</div>
        `;
        
        messages.appendChild(messageDiv);
        messages.scrollTop = messages.scrollHeight;
    }

    function getBotResponse(message) {
        for (const [key, response] of Object.entries(chatbotResponses)) {
            if (message.includes(key)) {
                return response;
            }
        }
        return chatbotResponses.default;
    }

    function handleChatKeypress(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    }
</script>


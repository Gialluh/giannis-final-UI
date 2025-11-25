<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giannis AI Chatbot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo-container">
                <div class="logo-icon">G</div>
                <h1>Giannis AI</h1>
            </div>
            <button class="new-chat-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                Nuova Chat
            </button>
            <div class="history-list">
                <div class="history-item active">Benvenuto su Giannis</div>
                <div class="history-item">Progetto WordPress</div>
                <div class="history-item">Idee Marketing</div>
            </div>
            <div class="user-profile">
                <div class="avatar">U</div>
                <div class="username">Utente</div>
            </div>
        </aside>

        <!-- Main Chat Area -->
        <main class="chat-interface">
            <header class="mobile-header">
                <div class="logo-text">Giannis AI</div>
            </header>

            <div class="chat-messages" id="chatMessages">
                <!-- Welcome Message -->
                <div class="message bot-message">
                    <div class="message-avatar">G</div>
                    <div class="message-content">
                        <p>Ciao! Sono Giannis, il tuo assistente AI. Come posso aiutarti oggi?</p>
                    </div>
                </div>
            </div>

            <div class="input-area-container">
                <div class="input-area">
                    <form id="chatForm" class="chat-form">
                        <div class="input-wrapper">
                            <textarea id="userInput" placeholder="Scrivi un messaggio a Giannis..." rows="1"></textarea>
                            <button type="submit" id="sendBtn" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="disclaimer">Giannis può commettere errori. Controlla le informazioni importanti.</div>
                </div>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>

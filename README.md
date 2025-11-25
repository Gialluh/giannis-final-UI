# 🤖 Giannis AI Chatbot

A modern, elegant AI chatbot interface built with HTML, CSS, and JavaScript, featuring the IRC color palette (black, yellow, grey).

## ✨ Features

- 🎨 **Modern UI Design** - Clean, premium interface with smooth animations
- 💬 **Chat Management** - Create, rename, and delete multiple chat sessions
- 🌓 **Dark/Light Mode** - Toggle between themes with persistent preferences
- 📝 **Markdown Support** - Bold text formatting in bot responses
- ⌨️ **Typewriter Effect** - Smooth character-by-character bot message display
- 💾 **Local Storage** - Chat history persists between sessions
- 📱 **Responsive Design** - Works on desktop and mobile devices

## 🚀 Getting Started

### Prerequisites

- A modern web browser (Chrome, Firefox, Safari, Edge)
- Signpost AI API credentials (TEAM_ID and AGENT_ID)

### Installation

1. **Clone the repository:**
   ```bash
   git clone <your-github-repo-url>
   cd giannis_chatbot
   ```

2. **Set up your API credentials:**
   ```bash
   # Copy the example configuration file
   copy config.example.js config.js
   ```

3. **Edit `config.js`** and add your API credentials:
   ```javascript
   const CONFIG = {
       SIGNPOST_API_URL: "https://signpost-ia-app.azurewebsites.net/agent",
       TEAM_ID: "your-team-id-here",
       AGENT_ID: your-agent-id-here
   };
   ```

4. **Open `index.html`** in your browser - that's it!

## 📁 Project Structure

```
giannis_chatbot/
├── index.html              # Main HTML file
├── style.css               # All styling and themes
├── script.js               # Chat logic and API integration
├── config.js               # Your API credentials (gitignored)
├── config.example.js       # Configuration template
├── giannis-logo.png        # Light mode logo
├── giannis-logo-grey.png   # Dark mode logo
└── README.md               # This file
```

## ⚙️ Configuration

The chatbot uses the Signpost AI API. You'll need:

- **TEAM_ID**: Your team identifier
- **AGENT_ID**: Your agent identifier

These should be configured in `config.js` (which is ignored by Git for security).

## 🎨 Customization

### Colors

The app uses CSS variables defined in `style.css`. Main colors:

- `--irc-black`: #000000
- `--irc-yellow`: #FFC20E
- `--irc-dark-grey`: #333333

### Typography

Uses the Inter font family from Google Fonts.

## 🔒 Security Notes

- **Never commit `config.js`** - It contains your API credentials
- The `.gitignore` file is configured to exclude sensitive files
- Share only `config.example.js` with your team

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is proprietary. Please contact the team for usage rights.

## 👥 Team

Created for internal use. For questions or support, contact your team lead.

## 🐛 Known Issues

- Chat history is stored locally - clearing browser data will delete chats
- API rate limits may apply depending on your Signpost AI plan

## 📧 Support

For issues or questions, please use the feedback button in the sidebar or contact the development team.

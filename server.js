const express = require('express');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Serve static files from current directory
app.use(express.static(__dirname));

// API endpoint to provide configuration
app.get('/api/config', (req, res) => {
    // Try to use environment variables (for Render deployment)
    // Fall back to local config if available (for local development)
    let config;

    if (process.env.TEAM_ID && process.env.AGENT_ID) {
        // Production: use environment variables
        config = {
            SIGNPOST_API_URL: process.env.SIGNPOST_API_URL || 'https://signpost-ia-app.azurewebsites.net/agent',
            TEAM_ID: process.env.TEAM_ID,
            AGENT_ID: parseInt(process.env.AGENT_ID)
        };
    } else {
        // Local development: try to load from config.js
        try {
            // Note: This is a fallback for local development only
            config = {
                SIGNPOST_API_URL: 'https://signpost-ia-app.azurewebsites.net/agent',
                TEAM_ID: '43892cde-286a-4f23-8049-e4a0168cc11c',
                AGENT_ID: 368
            };
        } catch (error) {
            return res.status(500).json({ error: 'Configuration not available' });
        }
    }

    res.json(config);
});

// Serve index.html for root path
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
    console.log(`Open http://localhost:${PORT} to view the chatbot`);
});

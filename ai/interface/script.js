document.getElementById('sendButton').addEventListener('click', () => {
    const prompt = document.getElementById('userPrompt').value;
    const model = document.getElementById('modelSelect').value;
    
    if (prompt.trim() === '') {
        alert('Please enter a prompt');
        return;
    }

    const payload = {
        model: model,
        messages: [
            { role: 'system', content: 'System prompt (only the first message, once)' },
            { role: 'user', content: prompt }
        ],
        max_tokens: 2048,
        stream: false,
        temperature: 0.7,
        top_p: 0.5
    };

    fetch('https://api.discord.rocks/v1/chat/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'any-a1897588df79331e'
        },
        body: JSON.stringify(payload)
    })
    .then(response => response.json())
    .then(data => {
        const responseContent = data.choices[0].message.content;
        document.getElementById('responseContent').innerText = responseContent;
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while processing your request.');
    });
});

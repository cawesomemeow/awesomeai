# AwesomeAI

Willkommen bei **AwesomeAI** – Ihrer kostenlosen Plattform für Künstliche Intelligenz. AwesomeAI bietet Ihnen Zugriff auf GPT-4, DALL·E, Wetterdaten und vieles mehr über einfache APIs..

## Inhaltsverzeichnis

1. [Einführung](#einführung)
2. [Funktionen](#funktionen)
    - [GPT-4](#gpt-4)
    - [DALL·E](#dall·e)
    - [Wetter-API](#wetter-api)
3. [API-Dokumentation](#api-dokumentation)
    - [Authentifizierung](#authentifizierung)
    - [Beispielanfragen](#beispielanfragen)
4. [Beiträge](#beiträge)
5. [Lizenz](#lizenz)

## Einführung

**AwesomeAI** ist Ihre zentrale Anlaufstelle für leistungsstarke und kostenlose KI-Dienste. Egal ob Sie Text generieren, Bilder erstellen oder Wetterdaten abrufen möchten – unsere APIs machen es möglich. Entwickelt mit dem Ziel, die Nutzung von KI-Technologien zu vereinfachen und zugänglich zu machen, unterstützt AwesomeAI Entwickler und Unternehmen dabei, innovative Anwendungen zu schaffen.

## Funktionen

### GPT-4
Erstellen Sie menschenähnliche Texte für verschiedene Anwendungsfälle wie Chatbots, Textgenerierung und mehr.

### DALL·E
Generieren Sie beeindruckende Bilder aus Textbeschreibungen mit der leistungsstarken DALL·E-API.

### Wetter-API
Erhalten Sie aktuelle Wetterinformationen und Vorhersagen für beliebige Standorte weltweit.

## API-Dokumentation

### Authentifizierung
Sie können Sie sich über die Homepage von [AnyAi](https://gpt4.discord.rocks) auch eine API für Ihre Website holen.

### Beispielanfragen

#### GPT-4
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPT-4 Chat Interface</title>
</head>
<body>
    <h1>GPT-4 Chat Interface</h1>
    <form id="chatForm">
        <label for="userMessage">Enter your message:</label><br>
        <input type="text" id="userMessage" name="userMessage" required><br><br>
        <button type="submit">Send</button>
    </form>
    <h2>Response:</h2>
    <p id="response"></p>

    <script>
        document.getElementById('chatForm').addEventListener('submit', async function(event) {
            event.preventDefault();

            const userMessage = document.getElementById('userMessage').value;

            const payload = {
                messages: [
                    { role: 'user', content: userMessage }
                ],
                model: 'gpt-4-turbo-preview'
            };

            try {
                const response = await fetch('https://gpt4.discord.rocks/ask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });

                if (response.ok) {
                    const data = await response.json();
                    document.getElementById('response').textContent = data.response || 'No response received.';
                } else {
                    document.getElementById('response').textContent = `Error: ${response.status}, ${response.statusText}`;
                }
            } catch (error) {
                document.getElementById('response').textContent = `Error: ${error.message}`;
            }
        });
    </script>
</body>
</html>
```

#### DALL·E
```python
import requests

url = "https://api.awesomeai.example.com/dalle"
headers = {"Authorization": "Bearer YOUR_API_KEY_HERE"}
data = {"prompt": "Ein futuristisches Stadtbild im Stil von Blade Runner"}

response = requests.post(url, headers=headers, json=data)
print(response.json())
```

#### Wetter-API
```-- Dieses Projekt ist noch in Arbeit, vielen Dank für dein Verständnis!
```

## Beiträge
Wir freuen uns über Ihre Beiträge! Wenn Sie eine Funktion hinzufügen oder einen Fehler beheben möchten, erstellen Sie bitte einen Pull Request oder ein Issue.

## Lizenz
Dieses Projekt steht unter der [MIT-Lizenz](LICENSE).

---

Wir hoffen, dass **AwesomeAI** Ihnen bei Ihren Projekten weiterhilft und freuen uns auf Ihr Feedback und Ihre Vorschläge!

---

Besuchen Sie uns auf unserer [Website](https://awesomeai.pages.dev) für mehr Informationen.

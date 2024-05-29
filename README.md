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
Sie können Sie sich über die Homepage von [AnyAi](https://api.discord.rocks) auch eine API für Ihre Website holen.

### Beispielanfragen

#### GPT-4
```html
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPT-4 Chat Interface</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            outline: none;
        }

        button:hover {
            background-color: #45a049;
        }

        #responseContainer {
            margin-top: 20px;
        }

        #errorContainer {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>GPT-4 Chat Interface</h1>
        <input type="text" id="prompt" placeholder="Enter your message here">
        <button onclick="sendMessage()">Send Message</button>
        <div id="responseContainer"></div>
        <div id="errorContainer"></div>
    </div>

    <script>
        function sendMessage() {
            const prompt = document.getElementById('prompt').value;
            const responseContainer = document.getElementById('responseContainer');
            const errorContainer = document.getElementById('errorContainer');
            responseContainer.innerHTML = '';
            errorContainer.innerHTML = '';

            if (!prompt) {
                errorContainer.innerText = 'Please enter a message.';
                return;
            }

            const payload = {
                messages: [
                    { role: 'user', content: prompt }
                ],
                model: 'gpt-4-turbo-preview'
            };

            fetch('https://api.discord.rocks/ask', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(response => response.json())
            .then(data => {
                responseContainer.innerText = data.response || 'No response received.';
            })
            .catch(error => {
                errorContainer.innerText = `Error: ${error.message}`;
            });
        }
    </script>
</body>
</html>
```

#### DALL·E
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dall-E 3 Image Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            outline: none;
        }

        button:hover {
            background-color: #45a049;
        }

        #imageContainer {
            margin-top: 20px;
        }

        #errorContainer {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dall-E 3 Image Generator</h1>
        <input type="text" id="prompt" placeholder="Enter your prompt here">
        <button onclick="generateImage()">Generate Image</button>
        <div id="imageContainer"></div>
        <div id="errorContainer"></div>
    </div>

    <script>
        function generateImage() {
            const prompt = document.getElementById('prompt').value;
            const imageContainer = document.getElementById('imageContainer');
            const errorContainer = document.getElementById('errorContainer');
            imageContainer.innerHTML = '';
            errorContainer.innerHTML = '';

            if (!prompt) {
                errorContainer.innerText = 'Please enter a prompt.';
                return;
            }

            const url = `https://dalle.discord.rocks/generate?prompt=${encodeURIComponent(prompt)}`;

            fetch(url)
                .then(response => {
                    if (response.headers.get('Content-Type').includes('image')) {
                        return response.blob();
                    } else {
                        return response.json();
                    }
                })
                .then(data => {
                    if (data.response === 'BLOCKED PROMPT OR OUTPUT') {
                        errorContainer.innerText = 'Blocked prompt or output. Please try a different prompt.';
                    } else {
                        const imgURL = URL.createObjectURL(data);
                        const img = document.createElement('img');
                        img.src = imgURL;
                        imageContainer.appendChild(img);
                    }
                })
                .catch(error => {
                    errorContainer.innerText = `Error: ${error.message}`;
                });
        }
    </script>
</body>
</html>
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

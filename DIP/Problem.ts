class Mailer {
    public send(email: string, content: string): void {
        console.log(`Enviando email: ${content}\n a ${email}`);
    }
}

class SendWelcomeMessage {
    private readonly mailer: Mailer;

    constructor(mailer: Mailer) {
        this.mailer = mailer;
    }

    public sendWelcomeMessage(email: string): void {
        this.mailer.send(email, 'Welcome to our website!');
    }
}

const mailer = new Mailer();
const welcomeMessage = new SendWelcomeMessage(mailer);

welcomeMessage.sendWelcomeMessage("example@example.com");
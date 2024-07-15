# Importing the necessary libraries
from datetime import datetime

# Function to greet the user
def greet():
    current_time = datetime.now().strftime("%H:%M:%S")
    print(f"Bot: Hello! I am a Python bot. ({current_time})")

# Function to respond to user input
def respond(user_input):
    if "hello" in user_input.lower():
        return "Hello there!"
    elif "time" in user_input.lower():
        current_time = datetime.now().strftime("%H:%M:%S")
        return f"It's currently {current_time}"
    else:
        return "I'm sorry, I don't understand that."

# Main function to run the bot
def main():
    greet()
    while True:
        user_input = input("User: ")
        if user_input.lower() == "exit":
            print("Bot: Goodbye!")
            break
        else:
            response = respond(user_input)
            print(f"Bot: {response}")

# Running the bot
if __name__ == "__main__":
    main()

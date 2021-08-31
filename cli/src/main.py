from words import randomWord

def main():
    subject = randomWord("subjects").capitalize()
    adjective = randomWord("adjectives")

    result = f"{subject} {adjective}? No to pauza!"
    
    print(result)

if __name__ == "__main__":
    main()

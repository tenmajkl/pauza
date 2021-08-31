from random import choice
from os import linesep

def randomWord(file:str) -> str:
    f = open(file)
    lines = f.readlines()
    return choice(lines).replace(linesep, "")

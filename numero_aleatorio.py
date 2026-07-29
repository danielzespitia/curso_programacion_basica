import random

while True:
    numero = random.randint(1, 2)
    adivina = int(input("Cual es el numero?: "))
    
    if adivina == numero:
        print("Felicidades")
        break
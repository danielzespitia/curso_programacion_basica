edad = int(input("Cual es tu edad? ")) 


# Nivel 1
if edad == 18:
    print("Tienes 18 años")
    
    #Nivel 2
    bancaria = input("Tienes cuenta bancaria? (si/no) ").lower()
    
    if (bancaria == "si" or bancaria == "yes") or (bancaria == "s" or bancaria == "y"):
        print("Que bueno que ya tengas cuenta bancaria")
        
        #Nivel 3
        banco = input("Cual es tu banco? ").lower()
        
        if banco == "banesco":
            print("Que feo ese banco es para pura pobre que aparenta")
        elif banco == "mercantil":
            print("Mercantil es un buen banco pero no tiene TDC")
        elif banco == "provincial":
            print("Provincial es un buen banco pero es un fastidio")
        elif banco == "bnc":
            print("BNC es un MAL banco")
        elif banco == "bancamiga":
            print("Bancamiga es un REGULAR banco")
        elif banco == "bancaribe":
            print("Bancaribe es el mejor banco de Venezuela")
            
    else:
        print("Deberias abrir una cuenta bancaria")
    
    
    
    
    
    
    
    
elif edad < 18 and edad > 0: #1-17
    print("Eres menor de edad")
    
elif edad > 18 and edad < 65: #19-64
    print("Eres mayor de edad")
    
elif edad >= 65 and edad < 100: #65-99
    print("Eres adulto mayor")
    
elif edad >= 100: #100 o mas
    print("Estas muerto compadre")
    
elif edad == 0: #0
    print("Recien nacido")
    
elif edad < 0: #negativos
    print("Edad no valida")
    
else: 
    print("Entrada no valida")
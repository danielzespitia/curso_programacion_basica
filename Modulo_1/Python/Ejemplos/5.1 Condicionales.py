edad = int(input("Cual es tu edad? "))

if edad > 18 and edad < 60: # 19- 59
    print("Eres mayor de edad")

elif edad < 18 and edad > 0: #1-17
    print("Eres menor de edad.")

elif edad == 18:
    print("Acabas de cumplir la mayoria de edad.")

elif edad > 150:
    print("Estas muerto")

elif edad < 150 and edad >= 60: # 60-149
    print("Eres un adulto mayor")

elif edad < -1:
    print("No has nacido.")

else:
    print("NO VALIDO")
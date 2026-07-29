diccionario = {
    "nombre": "Juan",
    "edad": 30,
    "ciudad": "Madrid"
}

diccionario["nombre"] = "Daniel" 

diccionario["Profesion"] = "Ingeniero" 

for clave, valor in diccionario.items():
    print(f"{clave}: {valor}")


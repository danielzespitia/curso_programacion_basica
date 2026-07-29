#include <iostream>
#include <string>

int main() { // cout = print

    std::cout << "¡Hola, mundo!" << std::endl;

    std::string nombre;
    std::cout << "Introduce tu nombre: ";
    std::cin >> nombre;

    int edad;

    std::cout << "Cual es tu edad?: ";
    std::cin >> edad;

    std::cout << "Hola me llamo  " << nombre << " Y tengo " << edad << " años." << std::endl;
    return 0;
}
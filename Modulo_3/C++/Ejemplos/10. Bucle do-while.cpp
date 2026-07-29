#include <iostream>

int main() {
    
    int numero = 1;
    
    do {
        std::cout << "El número es: " << numero << std::endl;
        numero++;
    }

    while (numero <= 100);   

    return 0;
}
class Calculadora {
    a;
    b;

    constructor(a, b) {
        this.a = a;
        this.b = b;
    }

    sumar() {
        return this.a + this.b;
    }

    restar() {
        return this.a - this.b;
    }

    multiplicar() {
        return this.a * this.b;
    }

    dividir() {
        return this.a / this.b;
    }

    potencia() {
        return Math.pow(this.a, this.b);
    }

    raiz() {
        return Math.sqrt(this.a);
    }

    raizCuadrada() {
        return Math.pow(this.a, 1 / 2);
    }

    raizCubica() {
        return Math.pow(this.a, 1 / 3);
    }

    fibonacci() {
        if (this.a == 1 || (this.a === 0 && this.b === 1) || this.b === 0) {
            return [this.a, this.b];
        } else {
            return [
                this.fibonacci(this.a - 1) + this.fibonacci(this.a - 2),
                this.fibonacci(this.b - 1) + this.fibonacci(this.b - 2),
            ];
        }
    }
}

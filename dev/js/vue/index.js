import Vue from 'vue';
import Calculator from "./components/Calculator.vue";

export default class VueComponents {
    constructor() {
        this.calculator = document.getElementById('vue-calculator');
    }

    init() {
        if (this.calculator) {
            const el = this.calculator;
            const props = this.getPropsFromAttributes(el);
            new Vue({
                el,
                render: (h) => h(Calculator, { props }),
            });
        }
    }

    getPropsFromAttributes(element) {
        return [...element.attributes].reduce((prev, attribute) => ({
            ...prev,
            [attribute.name]: attribute.value,
        }));
    }
}
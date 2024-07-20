import { Controller } from "@hotwired/stimulus"
import IMask from "imask"

const typeMapping = {
    'Number': Number,
};
export default class extends Controller {
    static values = {
        mask: String,
        scale: { type: Number, default: 2 },
        radix: { type: String, default: '.' },
        thousandsSeparator: { type: String, default: '\'' },
        normalizeZeros: { type: Boolean, default: false },
    };
    connect() {
        this.mask = IMask(this.element, {
            mask: typeMapping[this.maskValue] || this.maskValue,
            scale: this.scaleValue,
            radix: this.radixValue,
            thousandsSeparator: this.thousandsSeparatorValue,
            normalizeZeros: this.normalizeZerosValue,
        });
    }
    disconnect() {
        this.mask?.destroy();
    }
}

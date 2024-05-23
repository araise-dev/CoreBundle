import {Controller} from "@hotwired/stimulus";
import { useClickOutside } from 'stimulus-use'

export default class extends Controller {
    static targets = ['menu']
    static values = {
        alignment: { type: String, default: 'bottom' },
    }

    connect() {
        super.connect();
        useClickOutside(this);
    }

    clickOutside (event) {
        this.close();
    }

    toggle (event) {
        event.stopPropagation();

        const dropdownDiv = this.menuTarget;
        if (this.hasMenuTarget && dropdownDiv.classList.contains('hidden')) {
            window.dispatchEvent(new Event('araise-dropdown:open'));
            dropdownDiv.classList.remove('hidden');
        } else {
            dropdownDiv.classList.add('hidden');
        }
    }

    close () {
        const dropdownDiv = this.menuTarget;
        if (this.hasMenuTarget && !dropdownDiv.classList.contains('hidden')) {
            dropdownDiv.classList.add('hidden');
        }
    }

    layoutCalculate () {
        const dropdownDiv = this.menuTarget;

        // Reset
        dropdownDiv.style.position = '';
        dropdownDiv.style.top = '';
        dropdownDiv.style.left = '';

        // Calculate
        const {top, left, bottom, height} = dropdownDiv.getBoundingClientRect();
        const windowHeight = document.body.clientHeight;

        // Set fixed position
        dropdownDiv.style.position = 'fixed';
        dropdownDiv.style.left = left + 'px';
        if(this.alignmentValue === 'bottom') {
            let topPosition = top;
            if(bottom > windowHeight) {
                topPosition = windowHeight - height;
            }
            dropdownDiv.style.top = topPosition + 'px';
        }
        if(this.alignmentValue === 'top') {
            let topPosition = top - height;
            dropdownDiv.style.top = topPosition + 'px';
        }
    }
}

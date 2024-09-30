import { Controller } from '@hotwired/stimulus';
import {easepick, KbdPlugin, TimePlugin} from '@easepick/bundle';
import easepickStyle from '!!raw-loader!@easepick/bundle/dist/index.css'

export default class extends Controller {
    static values = {
        /**
         * The language to use within the date picker (translation of months and days)
         */
        lang: String,
        /**
         * The format passed from the server to correctly parse the date
         */
        format: String
    }

    connect() {
        if (this.element.tagName !== 'INPUT') {
            return;
        }
        const type = this.element.getAttribute('type');
        const enableTime = type === 'time' || type === 'datetime-local';
        let plugins = [KbdPlugin];

        if (enableTime) {
            plugins.push(TimePlugin);
        }

        const picker = new easepick.create({
            element: this.element,
            css: easepickStyle,
            lang: this.langValue || 'de-DE',
            format: this.formatValue || (enableTime ? "YYYY-MM-DDTHH:mm" : "YYYY-MM-DD"),
            readonly: false,
            plugins: plugins,
            calendars: type === 'time' ? 0 : 1,
        });
    }
}

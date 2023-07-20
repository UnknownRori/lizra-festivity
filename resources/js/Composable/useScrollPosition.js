import { onMounted, onUnmounted, reactive } from 'vue'

export default function () {
    const position = reactive({
        x: 0,
        y: 0,
    });

    function update(event) {
        position.x = window.scrollX;
        position.y = window.scrollY;
    }

    onMounted(() => {
        window.addEventListener('scroll', update);
    })

    onUnmounted(() => {
        window.removeEventListener('scroll', update);
    });

    return position;
}

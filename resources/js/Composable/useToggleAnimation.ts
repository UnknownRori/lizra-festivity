import { ref, type Ref } from "vue";

import type { Option } from '@sniptt/monads';

export enum State {
    None = "None",
    On = "On",
    Off = "Off"
}

type Toggle = () => void;
type AnimationStyle = string;
type ReturningStyle = Ref<AnimationStyle>;

/**
 * @var animatedOnStart = Put this if animation start on load
 * @var beforeAnimate = Add this to set the style if the animation hasn't started
 * @var onAnimate = If animation state is on apply these style
 * @var offAnimate = If animation state is off apply these style
 */
export type ToggleAnimationOpts = {
    animatedOnStart: boolean,
    beforeAnimate: Option<AnimationStyle>,
    onAnimate: AnimationStyle,
    offAnimate: AnimationStyle,
};


/**
 * Custom hook for 2 - 3 way to animate, it has 3 state, if `animatedOnStart`
 * false it will set to `None`, if it true then it will set to `Off`
 * and `toggle` will toggle `On` and `Off` but if the state currently `None`
 * it will set to `On`
 *
 * @param opts
 * @returns [Toggle, AnimationStyle]
 */
export default function (opts: ToggleAnimationOpts): { toggle: Toggle, style: ReturningStyle, state: Ref<State> } {
    let state = ref(State.Off);
    const animateStyle = ref('');

    if (!opts.animatedOnStart) {
        state.value = State.None;
        animateStyle.value = opts.beforeAnimate.unwrapOr('');
    }


    const toggle = () => {
        if (state.value == State.None || state.value == State.Off) {
            state.value = State.On;

            // Do the animation
            animateStyle.value = opts.onAnimate;
        }
        else {
            state.value = State.Off;

            // Do the animation
            animateStyle.value = opts.offAnimate;
        }
    };
    return {
        toggle: toggle,
        style: animateStyle,
        state: state,
    };
}

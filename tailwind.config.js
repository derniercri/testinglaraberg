const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#fff',
            black: '#000',
            green: {
                '100': '#f0fff4',
                '200': '#c6f6d5',
                '300': '#9ae6b4',
                '400': '#68d391',
                '500': '#35D461',
                '600': '#38a169',
                '700': '#2f855a',
                '800': '#276749',
                '900': '#22543d',
            },
            yellow: {
                '100': '#fffde7',
                '200': '#fff9c4',
                '300': '#fff59d',
                '400': '#fff176',
                '500': '#F9E104',
                '600': '#F9E104',
                '700': '#F9E104',
                '800': '#F9E104',
                '900': '#F9E104',
            },
            orange: {
                '100': '#fff8e1',
                '200': '#ffecb3',
                '300': '#ffe082',
                '400': '#ffd54f',
                '500': '#F99D07',
                '600': '#F99D07',
                '700': '#F99D07',
                '800': '#F99D07',
                '900': '#F99D07',
            },
            violet: {
                '100': '#f3e5f5',
                '200': '#e1bee7',
                '300': '#ce93d8',
                '400': '#ba68c8',
                '500': '#882FF6',
                '600': '#7B1AF6',
                '700': '#6A0896',
                '800': '#5A078B',
                '900': '#4A077E',
            },
            blue: {
                '100': '#e3f2fd',
                '200': '#bbdefb',
                '300': '#90caf9',
                '400': '#64b5f6',
                '500': '#42A5F5',
                '600': '#2196F3',
                '700': '#1E88E5',
                '800': '#1976D2',
                '900': '#1565C0',

            },
            red: {
                '100': '#fff5f5',
                '200': '#fed7d7',
                '300': '#feb2b2',
                '400': '#fc8181',
                '500': '#F44336',
                '600': '#F44336',
                '700': '#F44336',
                '800': '#F44336',
                '900': '#F44336',
            },
            pink: {
                '100': '#fff5f5',
                '200': '#fed7d7',
                '300': '#feb2b2',
                '400': '#fc8181',
                '500': '#F06292',
                '600': '#F06292',
                '700': '#F06292',
                '800': '#F06292',
                '900': '#F06292',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

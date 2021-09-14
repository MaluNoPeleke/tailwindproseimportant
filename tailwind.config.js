module.exports = {
    mode: 'jit',
    purge: {
        preserveHtmlElements: true,
        mode: 'layers',
        enabled: true,
        content: [
            '.test.php',
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        pre: null,
                        code: null,
                        'code::before': null,
                        'code::after': null,
                        'pre code': null,
                        'pre code::before': null,
                        'pre code::after': null,
                    },
                },
             },
        },
    },
    variants: {
        extend: {},
        display: ["group-hover"],
        transform: ['hover', 'focus'],
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}

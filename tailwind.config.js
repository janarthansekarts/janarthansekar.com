/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
            },
            maxWidth: {
                'prose': '65ch',
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.gray.800'),
                        a: {
                            color: theme('colors.gray.900'),
                            textDecoration: 'underline',
                            '&:hover': {
                                color: theme('colors.black'),
                            },
                        },
                        h1: { color: theme('colors.gray.900') },
                        h2: { color: theme('colors.gray.900') },
                        h3: { color: theme('colors.gray.900') },
                        blockquote: {
                            color: theme('colors.gray.700'),
                            borderLeftColor: theme('colors.gray.300'),
                        },
                    },
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

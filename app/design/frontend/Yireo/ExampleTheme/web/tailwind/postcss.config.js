const { postcssImportHyvaModules } = require("@hyva-themes/hyva-modules");

module.exports = {
    plugins: [
        postcssImportHyvaModules,
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
        require('postcss-preset-env'),
        require('postcss-font-magician')({
            variants: {
                'Open Sans': {
                    '300': [],
                    '400': [],
                    '700': [],
                },
                'Alice': {
                    '300': [],
                    '400': [],
                    '500': [],
                    '700': [],
                },
            },
            foundries: ['google']
        }),
    ]
}

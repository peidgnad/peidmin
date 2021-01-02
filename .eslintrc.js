module.exports = {
    env: {
        browser: true,
        commonjs: true,
        es6: true,
    },

    extends: ['eslint:recommended', 'plugin:prettier/recommended'],

    parserOptions: {
        sourceType: 'module',
    },

    rules: {
        eqeqeq: 'off',
        indent: ['error', 4, { SwitchCase: 1 }],
        'no-console': 'off',
        'no-debugger': 'off',
        'prettier/prettier': [
            'error',
            {
                endOfLine: 'auto',
            },
        ],
    },
}

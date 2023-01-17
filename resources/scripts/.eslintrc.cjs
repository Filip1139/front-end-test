module.exports = {
  root: true,

  extends: ['@roots/bud-eslint/config', 'prettier'],
  plugins: ['prettier'],
  env: {
    browser: true,
    commonjs: true,
    es6: true,
    node: true,
    jquery: true
  },
  ignorePatterns: ['dist/scripts/*.js', 'src/static/js/*.js'],
  rules: {
    'prettier/prettier': ['error'],
    // 'arrow-parens': [2, 'as-needed', { requireForBlockBody: true }],
    curly: [2, 'multi-line'],
    indent: 'off',
    'prefer-spread': [2],
    'no-use-before-define': 'off',
    'import/prefer-default-export': 0,
    'import/no-unresolved': 0,
    'func-names': 0,
    'padding-line-between-statements': [
      'error',
      {
        blankLine: 'always',
        prev: '*',
        next: 'return'
      },
      {
        blankLine: 'always',
        prev: ['const', 'let', 'var'],
        next: '*'
      },
      {
        blankLine: 'any',
        prev: ['const', 'let', 'var'],
        next: ['const', 'let', 'var']
      }
    ],
    'sort-imports': [
      'error',
      {
        ignoreCase: true,
        ignoreDeclarationSort: true,
        ignoreMemberSort: true,
        memberSyntaxSortOrder: ['none', 'all', 'multiple', 'single'],
        allowSeparatedGroups: true
      }
    ]
  },
  parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module'
  }
};

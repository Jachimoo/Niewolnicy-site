<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/languages/en.yaml',
    'modified' => 1643805578,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No date provided',
                'BAD_DATE' => 'Bad date',
                'AGO' => 'ago',
                'FROM_NOW' => 'from now',
                'JUST_NOW' => 'just now',
                'SECOND' => 'second',
                'MINUTE' => 'minute',
                'HOUR' => 'hour',
                'DAY' => 'day',
                'WEEK' => 'week',
                'MONTH' => 'month',
                'YEAR' => 'year',
                'DECADE' => 'decade',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'Sekund',
                'MINUTE_PLURAL' => 'Minuty',
                'HOUR_PLURAL' => 'Godziny',
                'DAY_PLURAL' => 'Dni',
                'WEEK_PLURAL' => 'Tygodnie',
                'MONTH_PLURAL' => 'Miesi??ce',
                'YEAR_PLURAL' => 'Lata',
                'DECADE_PLURAL' => 'Dekady',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'godz',
                'WK_PLURAL' => 'tyg',
                'MO_PLURAL' => 'mies',
                'YR_PLURAL' => 'lat',
                'DEC_PLURAL' => 'dekad'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validation failed:</b>',
                'INVALID_INPUT' => 'Invalid input in',
                'MISSING_REQUIRED_FIELD' => 'Missing required field:',
                'XSS_ISSUES' => 'Potential XSS issues detected in \'%s\' field'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Stycze??',
                1 => 'Luty',
                2 => 'Marzec',
                3 => 'Kwiecie??',
                4 => 'Maj',
                5 => 'Czerwiec',
                6 => 'Lipiec',
                7 => 'Sierpie??',
                8 => 'Wrzesie??',
                9 => 'Pa??dziernik',
                10 => 'Listopad',
                11 => 'Grudzie??'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Poniedzia??ek',
                1 => 'Wtorek',
                2 => '??roda',
                3 => 'Czwartek',
                4 => 'Pi??tek',
                5 => 'Sobota',
                6 => 'Niedziela'
            ],
            'YES' => 'Tak',
            'NO' => 'Nie',
            'CRON' => [
                'EVERY' => 'every',
                'EVERY_HOUR' => 'every hour',
                'EVERY_MINUTE' => 'every minute',
                'EVERY_DAY_OF_WEEK' => 'every day of the week',
                'EVERY_DAY_OF_MONTH' => 'every day of the month',
                'EVERY_MONTH' => 'every month',
                'TEXT_PERIOD' => 'Every <b />',
                'TEXT_MINS' => ' at <b /> minute(s) past the hour',
                'TEXT_TIME' => ' at <b />:<b />',
                'TEXT_DOW' => ' on <b />',
                'TEXT_MONTH' => ' of <b />',
                'TEXT_DOM' => ' on <b />',
                'ERROR1' => 'The tag %s is not supported!',
                'ERROR2' => 'Bad number of elements',
                'ERROR3' => 'The jquery_element should be set into jqCron settings',
                'ERROR4' => 'Unrecognized expression'
            ]
        ]
    ]
];

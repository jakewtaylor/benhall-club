const _ = require('lodash');

module.exports = function ({ gradients, variants }) {
    return function({ addUtilities, e }) {
        const utilities = _.map(gradients, ([start, end], name) => ({
            [`.bgg-${e(name)}`]: {
                backgroundImage: `linear-gradient(to right, ${start}, ${end})`,
            },
            [`.bgg-d-${e(name)}`]: {
                backgroundImage: `linear-gradient(to bottom, ${start}, ${end})`,
            },
        }));

        addUtilities(utilities, variants);
    };
};

export const stringToSlug = (str) => (
    str
        .toLowerCase()
        .replace(/[ /]+/g, '-')
        .replace(/[^\w-]+/g, '')
)
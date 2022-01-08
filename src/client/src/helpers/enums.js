export const Breakpoint = {
    SMALL: 500,
    MEDIUM: 850,
    LARGE: 1024
}

export const DocSectionType = {
    SECTION: 'section',
    SUBSECTION: 'subsection',
    values() { return [this.SECTION, this.SUBSECTION] }
}

export const Fractions = {
    ORDINARY_DEMON_SLAYERS: 'Ordinary Demon Slayers',
    UBUYASHIKI_FAMILY: 'Ubuyashiki Family',
    HASHIRA: 'Hashira',
    BUTTERFLY_MANSION: 'Butterfly Mansion',
    SWORDSMITH_VILLAGE: 'Swordsmith Village',
    OTHER_SLAYERS: 'Other/Associations',
    TWELVE_KIZUKI: 'Ordinary Demons',
    SPIDER_FAMILY: 'Twelve Kizuki',
    ORDINARY_DEMONS: 'Spider Family',
    OTHERS: 'Others',

    values() {
        return [
            this.ORDINARY_DEMONS,
            this.UBUYASHIKI_FAMILY,
            this.HASHIRA,
            this.BUTTERFLY_MANSION,
            this.SWORDSMITH_VILLAGE,
            this.OTHER_SLAYERS,
            this.TWELVE_KIZUKI,
            this.SPIDER_FAMILY,
            this.ORDINARY_DEMONS,
            this.OTHERS
    ] }
}
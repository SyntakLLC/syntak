export interface SocialLink {
    icon: string;
    title: string;
    description: string;
    href: string;
}

export const SOCIAL_LINKS: SocialLink[] = [
    {
        icon: "https://cdn.simpleicons.org/linkedin",
        title: "LinkedIn",
        description: "@syntak",
        href: "https://linkedin.com/company/syntak",
    },
    {
        icon: "https://cdn.simpleicons.org/github",
        title: "GitHub",
        description: "@syntak",
        href: "https://github.com/syntak",
    },
    {
        icon: "https://cdn.simpleicons.org/x",
        title: "X (Twitter)",
        description: "@syntak",
        href: "https://x.com/syntak",
    },
    {
        icon: "https://cdn.simpleicons.org/instagram",
        title: "Instagram",
        description: "@syntak",
        href: "https://instagram.com/syntak",
    },
];

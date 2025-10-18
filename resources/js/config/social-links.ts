import linkedinIcon from "../../img/linkedin-logo.webp";
import githubIcon from "../../img/github-logo.png";
import xIcon from "../../img/x-logo.jpg";
import instagramIcon from "../../img/instagram-logo.png";

export interface SocialLink {
    icon: string;
    title: string;
    description: string;
    href: string;
}

export const SOCIAL_LINKS: SocialLink[] = [
    {
        icon: linkedinIcon,
        title: "LinkedIn",
        description: "amaansyedali",
        href: "https://linkedin.com/in/amaansyedali",
    },
    {
        icon: githubIcon,
        title: "GitHub",
        description: "@SyntakLLC",
        href: "https://github.com/SyntakLLC",
    },
    {
        icon: xIcon,
        title: "X (Twitter)",
        description: "@AmaanAli630",
        href: "https://x.com/AmaanAli630",
    },
    {
        icon: instagramIcon,
        title: "Instagram",
        description: "@syntakllc",
        href: "https://instagram.com/syntakllc",
    },
];

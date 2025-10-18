export interface Project {
    id: string;
    title: string;
    period: {
        start: string;
        end?: string;
    };
    link: string;
    skills: string[];
    description: string;
    logo?: string;
    isExpanded?: boolean;
}
import radarLogo from "../../img/radar-logo.png";

export const PROJECTS: Project[] = [
    {
        id: "radar",
        title: "Radar",
        period: {
            start: "2024",
            end: "2025",
        },
        link: "https://useradar.ai",
        skills: [
            "Next.js",
            "TypeScript",
            "AI/ML",
            "Chrome Extension",
            "Automation",
            "Python",
            "FastAPI",
        ],
        description: `Radar revolutionizes job hunting by making the impossible possible. Using cutting-edge AI technology, it hunts and applies to jobs while you sleep, capturing the dream of truly effortless job searching.

**Key Features:**
- Automated job discovery and application
- AI-powered resume optimization
- Browser extension for seamless integration
- Real-time application tracking`,
        logo: radarLogo,
        isExpanded: true,
    },
    {
        id: "notedly",
        title: "Notedly AI",
        period: {
            start: "2023",
        },
        link: "https://notedly.ai",
        skills: [
            "Next.js",
            "React",
            "TypeScript",
            "OpenAI",
            "Stripe",
            "PostgreSQL",
        ],
        description: `An in-house product by Syntak, Notedly offers AI study solutions to over 90,000 students worldwide. The platform integrates bleeding-edge AI technology with a fast, modern, and user friendly UI.

Features include AI-powered note generation, study guides, and essay writing assistance.`,
        logo: "https://i.imgur.com/ifyXr9h.png",
    },
    {
        id: "aipapi",
        title: "AI Papi",
        period: {
            start: "2023",
            end: "2024",
        },
        link: "https://aipapi.io",
        skills: ["Next.js", "React", "TypeScript", "AI/ML", "Image Processing"],
        description: `Featuring best-on-the-market AI technology, AI Papi gives students a little "help" on their homework. Syntak developed an impressive user interface and a complex suite of backend software to help AI Papi capture the college zeitgeist.`,
        logo: "https://i.imgur.com/eVJFA9h.png",
    },
    {
        id: "homexe",
        title: "Homexe",
        period: {
            start: "2022",
        },
        link: "https://apps.apple.com/us/app/homexe-win/id1601072257",
        skills: [
            "React Native",
            "TypeScript",
            "CRM Integration",
            "Mobile Development",
        ],
        description: `Syntak designed this beautiful app for the real estate agents at Homexe to help them track their sales progress. The app seamlessly integrated with their CRM, Follow Up Boss, to automate data transfer.`,
        logo: "https://i.imgur.com/mJER4bw.png",
    },
];

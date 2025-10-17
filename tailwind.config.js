import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import colors from "tailwindcss/colors";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    darkMode: "class",

    theme: {
        extend: {
            colors: {
                brand: colors.sky,
                ...colors,
                background: "var(--background)",
                foreground: "var(--foreground)",
                primary: {
                    DEFAULT: "var(--primary)",
                    foreground: "var(--primary-foreground)",
                },
                secondary: {
                    DEFAULT: "var(--secondary)",
                    foreground: "var(--secondary-foreground)",
                },
                muted: {
                    DEFAULT: "var(--muted)",
                    foreground: "var(--muted-foreground)",
                },
                card: {
                    DEFAULT: "var(--card)",
                    foreground: "var(--card-foreground)",
                },
                popover: {
                    DEFAULT: "var(--popover)",
                    foreground: "var(--popover-foreground)",
                    border: "var(--popover-border)",
                },
                accent: {
                    DEFAULT: "var(--accent)",
                    foreground: "var(--accent-foreground)",
                },
                accent2: "var(--accent2)",
                border: "var(--border)",
                edge: "var(--edge)",
                input: "var(--input)",
                ring: "var(--ring)",
                info: "var(--info)",
                success: "var(--success)",
                destructive: "var(--destructive)",
                link: "var(--link)",
                code: {
                    DEFAULT: "var(--code)",
                    foreground: "var(--code-foreground)",
                    number: "var(--code-number)",
                    highlight: "var(--code-highlight)",
                },
                selection: {
                    DEFAULT: "var(--selection)",
                    foreground: "var(--selection-foreground)",
                },
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                display: ["Manrope", ...defaultTheme.fontFamily.sans],
                mono: [
                    "ui-monospace",
                    "SFMono-Regular",
                    ...defaultTheme.fontFamily.mono,
                ],
            },
            aspectRatio: {
                "2/1": "2 / 1",
                "3/1": "3 / 1",
                "1200/630": "1200 / 630",
            },
            boxShadow: {
                popover: "var(--shadow-popover)",
            },
            spacing: {
                4.5: "1.125rem",
                11.5: "2.875rem",
                22: "5.5rem",
            },
            keyframes: {
                "fade-in": {
                    from: { opacity: "0" },
                    to: { opacity: "1" },
                },
                "fade-out": {
                    from: { opacity: "1" },
                    to: { opacity: "0" },
                },
                "collapsible-down": {
                    from: { height: "0" },
                    to: { height: "var(--radix-collapsible-content-height)" },
                },
                "collapsible-up": {
                    from: { height: "var(--radix-collapsible-content-height)" },
                    to: { height: "0" },
                },
            },
            animation: {
                "fade-in": "fade-in 200ms ease-out",
                "fade-out": "fade-out 200ms ease-out",
                "collapsible-down": "collapsible-down 200ms ease-out",
                "collapsible-up": "collapsible-up 200ms ease-out",
            },
        },
    },

    plugins: [forms, typography],
};

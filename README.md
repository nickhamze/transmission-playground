# Transmission for OpenStation — Playground

A real WordPress demo of Transmission: a separate, simpler editor over normal WordPress posts. OpenStation 1.1.8, Transmission 0.5.0, WordPress 7.0 and PHP 8.3. Includes a draft, a published post, categories/tags and an image in the core Media Library. The normal Posts interface remains available.

[Launch Transmission in WordPress Playground](https://playground.wordpress.net/?mode=seamless&blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fnickhamze%2Ftransmission-playground%2F9d4b57f%2Ftransmission-playground.zip)

The desktop has a **Transmission** icon. The app opens automatically on first launch. Write a draft, use **••• → Media Library**, adjust **••• → Post settings**, or publish a test post and inspect it in WordPress's Posts app.

## Codex

Download `transmission-codex-companion-0.4.0.zip`. Extract it, install Node.js 22+, then run `npm install` and `npm start` in the extracted folder. In the editor choose **Connect Codex**, sign in with ChatGPT if needed, and click **Connect this editor** in the local companion. Keep its window and terminal open. No credentials are embedded in this demo or stored in WordPress.

## Keep your work

This is an experimental browser sandbox. Export your Playground before closing it if you want to keep changes. The bundle contains no real account credentials or API keys. The standard Playground admin login is for the disposable demo only.

## Limitations

The inserter focuses on writing blocks. Existing block markup uses WordPress’s parser and serializer; plugin-specific blocks and advanced controls may need the standard editor. Codex requires the local companion and its normal account availability/usage limits. Some browsers may restrict companion popups from sandboxed iframes; use a normal browser tab if needed.

Transmission 0.5 uses the WordPress core block editor and OpenStation theme tokens. Its launcher defaults to the desktop. The site opens a sample draft automatically. Published posts use the site’s WordPress theme.

## Writing interface

Posts opens the draft library. WordPress contextual formatting appears when you click a block. Use its **AI** action, the header **AI** button, or **Cmd/Ctrl+J** for a compact writing prompt. Clearer and Shorter rewrite the active paragraph or heading; Continue inserts after it. Every suggestion requires acceptance and supports Undo. AI targets whole paragraphs/headings, not highlighted substrings. Open the Codex connection disclosure in the prompt to pair the companion.

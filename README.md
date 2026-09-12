# Transmission for OpenStation — Playground

A real WordPress demo of Transmission: a separate, simpler editor over normal WordPress posts. OpenStation 1.1.8, Transmission 0.3.0, WordPress 7.0 and PHP 8.3. Includes a draft, a published post, categories/tags and an image in the core Media Library. The normal Posts interface remains available.

[Launch Transmission in WordPress Playground](https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fnickhamze%2Ftransmission-playground%2Fmain%2Ftransmission-playground.zip)

The desktop has a **Transmission** icon. The app opens automatically on first launch. Write a draft, choose **Add media**, adjust **Post settings**, or publish a test post and inspect it in WordPress's Posts app.

## Codex

Download `transmission-codex-companion-0.3.0.zip`. Extract it, install Node.js 22+, then run `npm install` and `npm start` in the extracted folder. In the editor choose **Connect Codex**, sign in with ChatGPT if needed, and click **Connect this editor** in the local companion. Keep its window and terminal open. No credentials are embedded in this demo or stored in WordPress.

## Keep your work

This is an experimental browser sandbox. Export your Playground before closing it if you want to keep changes. The bundle contains no real account credentials or API keys. The standard Playground admin login is for the disposable demo only.

## Limitations

Existing complex Gutenberg layouts open in WordPress's standard editor. Transmission currently supports prose and simple inline images, not every core block. Codex requires the local companion and its normal account availability/usage limits. Some browsers may restrict companion popups from sandboxed iframes; use a normal browser tab if needed.

# 🚀 WP Starter Themes

A collection of **WordPress theme starters (boilerplates)** for fast development of custom websites, landing pages, and eCommerce projects.

> ⚠️ These are not ready-to-use themes.
> They are **development templates** designed to help you quickly build your own custom WordPress themes.

---

## 📦 Available Starters

### 🔹 wp-classic-starter

Starter template for classic WordPress themes.

* Minimal structure
* Core template files (`index.php`, `page.php`, etc.)
* Modular architecture (`templates/`, `parts/`)
* Ideal for custom landing pages and business websites

---

### 🔹 wp-classic-shop

Starter template for WooCommerce-based projects.

* Prepared structure for shop development
* Optimized for product pages and catalogs
* Modular components for scaling
* Clean asset handling

---

### 🔹 wp-block-starter

Starter template for block-based WordPress themes (Gutenberg / FSE).

* Full Site Editing support
* Block templates (`/templates/`)
* Patterns support (`/patterns/`)
* Editor styles (`editor.css`)
* Modern WordPress workflow

---

## ⚙️ Features

* Clean and scalable architecture
* Modular structure for reusable components
* CSS reset via `optimize.css`
* Structured assets (CSS, JS, images)
* Developer-oriented setup
* Easy integration with custom HTML layouts

---

## 🚀 Installation

### Option 1 — Clone full repository

```bash
git clone https://github.com/ovcharovcoder/wp-starter-themes.git
```

---

### Option 2 — Download specific theme only

#### 🔹 Method 1 (manual via GitHub)

1. Open the repository in browser
2. Go to the desired theme folder
3. Click **"Download ZIP"** (or download the whole repo and extract only needed folder)

---

#### 🔹 Method 2 (via Git sparse checkout)

```bash
git clone --filter=blob:none --no-checkout https://github.com/ovcharovcoder/wp-starter-themes.git
cd wp-starter-themes
git sparse-checkout init --cone
git sparse-checkout set wp-block-starter
git checkout
```

> Replace `wp-block-starter` with any theme name.

---

## 📁 Usage

1. Copy selected theme into:

```
/wp-content/themes/
```

2. Activate it in WordPress
3. Start replacing markup with your own layout

---

## 🧠 Philosophy

These starters are built to:

* Speed up development
* Avoid repetitive setup
* Keep code clean and structured
* Provide flexibility for any custom project

The main goal is to simplify converting static HTML into WordPress themes.

---

## 📌 Use Cases

* Custom landing pages
* Business websites
* WooCommerce stores
* Rapid prototyping

---

## 📄 License

GPL v2 or later

---

## 👨‍💻 Author

Created by Andrii — Web Developer & Designer

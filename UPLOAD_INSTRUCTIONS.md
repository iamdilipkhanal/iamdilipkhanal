# Upload Dilip Khanal's portfolio to GitHub Pages

This package is arranged for the `main` branch and `/docs` publishing source.

## Upload

1. Extract `dilipkhanal-github-pages.zip` on your computer.
2. Open the `iamdilipkhanal/iamdilipkhanal` repository on GitHub.
3. Upload the complete `docs` folder to the repository's `main` branch. Keep the folder name exactly `docs`.
4. Open **Settings → Pages**.
5. Under **Build and deployment**, select **Deploy from a branch**.
6. Select branch **main**, folder **/docs**, then press **Save**.
7. Under **Custom domain**, confirm `dilipkhanal.com.np` is entered.
8. Enable **Enforce HTTPS** after GitHub makes that option available.

## Important

- Do not upload only the ZIP file to the repository. Extract it first.
- Do not delete `docs/CNAME`; it preserves the custom domain when publishing from a branch.
- The website is self-contained in `docs/index.html`. No build command or package installation is required.
- Uploading these files changes the website, not the GitHub profile README shown on your GitHub account.

GitHub documentation:

- Publishing source: https://docs.github.com/en/pages/getting-started-with-github-pages/configuring-a-publishing-source-for-your-github-pages-site
- Custom domain: https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site

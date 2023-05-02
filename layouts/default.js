import Head from "next/head";
import config from "../config.json";

export default function Layout({ children, heading = null, hero = null }) {
  let title = heading ? heading : config.title;
  let image = hero ? hero : config.hero;

  return (
    <>
      <Head>
        <title>{title}</title>
        <meta
          key="viewport"
          name="viewport"
          content="width=device-width, initial-scale=1"
        />
        <meta key="encoding" charSet="utf-8" />
        <meta
          key="contentType"
          httpEquiv="content-type"
          content="text/html; charset=UTF-8"
        />
        <meta name="description" content={config.description} />
        <meta name="theme-color" content={config.color} />
        <link rel="manifest" href="/manifest.json" />

        <meta property="og:title" content={title} />
        <meta name="twitter:title" content={title} />
        <meta name="description" content={config.description} />
        <meta property="og:description" content={config.description} />
        <meta name="twitter:description" content={config.description} />
        <meta property="og:type" content="website" />
        <meta name="twitter:image" content={image} />
        <meta name="twitter:card" content="summary_large_image" />
        <meta property="og:image" content={image} />
        <meta property="og:url" content={config.url} />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <div className="bg-white fixed top-0 left-0 right-0 z-50 p-4 font-bold">
        <p>This is an archive of a previous conference - thanks for checking it out! You can see our current conference at <a class="underline" href="https://nordevcon.com">nordevcon.com</a></p>
      </div>
    
      <main className="min-h-screen bg-blue-50">{children}</main>
    </>
  );
}

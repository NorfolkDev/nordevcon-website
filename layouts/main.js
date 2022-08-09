import Head from "next/head";
import Footer from "../components/Footer";

const description =
  "The eastern region's biggest tech conference returns February 26-28th with a fantastic line-up of speakers and workshops.";
const imageUrl = "/static/images/nordev.jpg";
const defaultTitle = "Norfolk Developers Conference 2020";

function Layout({ children, title }) {
  function getTitle() {
    return title == null ? defaultTitle : `${title} | ${defaultTitle}`;
  }

  return (
    <>
      <Head>
        <title>{getTitle()}</title>
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
        <meta name="description" content={description} />
        <meta name="theme-color" content="#44337a" />
        <link rel="manifest" href="/manifest.json" />

        <meta property="og:title" content={title} />
        <meta name="twitter:title" content={title} />
        <meta name="description" content={description} />
        <meta property="og:description" content={description} />
        <meta name="twitter:description" content={description} />
        <meta property="og:type" content="website" />
        <meta name="twitter:image" content={imageUrl} />
        <meta name="twitter:card" content="summary_large_image" />
        <meta property="og:image" content={imageUrl} />
        <meta property="og:url" content="https://nordevcon.com" />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <main className="min-h-screen">
        <div className="fixed top-0 z-50 min-w-full p-4 font-extrabold text-yellow-900 bg-yellow-600">
          <p>
            This is an archive of a previous conference - thanks for checking it out! You can see our current conference at <a className="underline" href="https://nordevcon.com">nordevcon.com</a>
          </p>
        </div>
        {children}
        <Footer />
      </main>
    </>
  );
}

export default Layout;

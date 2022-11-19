import config from "../config.json";
import Layout from "../layouts/default";
import Hero from "../components/Hero";
import Introduction from "../components/Introduction";
import Tickets from "../components/Tickets";
import Venue from "../components/Venue";
import Newsletter from "../components/Newsletter";
import Footer from "../components/Footer";
import Schedule from "../components/Schedule";

export default function Home({ schedule }) {
  return (
    <Layout>
      <Hero />

      <Introduction />
      <Tickets />
      <Schedule data={schedule} />
      <Venue />
      <Newsletter />
      <Footer />
    </Layout>
  );
}

const apiKey = process.env.NEXT_PUBLIC_AIRTABLE_API_KEY;
const apiBase = "https://api.airtable.com/v0/appsFsySYgjKqDoLu";

export async function getServerSideProps() {
  const res = await fetch(`${apiBase}/Schedule`, {
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${apiKey}`,
    },
  });

  const json = await res.json();

  return {
    props: {
      schedule: json.records,
    },
  };
}

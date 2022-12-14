const apiKey = process.env.NEXT_PUBLIC_AIRTABLE_API_KEY;
const apiBase = "https://api.airtable.com/v0/appsFsySYgjKqDoLu";

async function get(endpoint, cache) {
  const url = `${apiBase}${endpoint}`;

  const cached = await cache?.match(url);

  if (cached) {
    return extractJson(cached);
  }

  const res = await fetch(url, {
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${apiKey}`,
    },
  });

  if (cache) {
    const cloned = res.clone();
    cloned.headers.set("Cache-Control", "max-age=60");
    cache.put(url, cloned);
  }

  return extractJson(res);
}

async function extractJson(res) {
  const json = await res.json();
  return json.records;
}

export async function getSchedule(cache) {
  return get("/Schedule", cache);
}

export async function getSponsors() {
  return get("/Sponsors");
}

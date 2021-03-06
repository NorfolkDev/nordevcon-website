import Speaker from "../components/Speaker";

function simpleSort(a, b) {
  if (a.fields.Name < b.fields.Name) return -1;
  if (a.fields.Name > b.fields.Name) return 1;
  return 0;
}

function Speakers({ speakers }) {
  return (
    <>
      <ul className="flex flex-wrap mb-2 lg:mb-4">
        {speakers
          .filter(speaker => speaker.fields.Keynote === true)
          .sort(simpleSort)
          .map(speaker => (
            <Speaker key={speaker.id} speaker={speaker} />
          ))}
      </ul>
      <ul className="flex flex-wrap -ml-4 -mr-4">
        {speakers
          .filter(speaker => speaker.fields.Keynote !== true)
          .sort(simpleSort)
          .map(speaker => (
            <Speaker key={speaker.id} speaker={speaker} />
          ))}
      </ul>
    </>
  );
}

export default Speakers;

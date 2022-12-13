import { useEffect, useState } from "react";

// Good ol' bit of copy/pasta because my brain began to hurt
// Stores state & retrieves it from localStorage
// Updated to reduce dependency loop
export function useStickyState(defaultValue, key) {
  const [value, setValue] = useState(defaultValue);
  const setStickyValue = (value) => {
    window.localStorage.setItem(key, JSON.stringify(value));

    return setValue(value);
  };

  useEffect(() => {
    const stickyValue = window.localStorage.getItem(key);

    if (stickyValue !== null) {
      setValue(() => JSON.parse(stickyValue));
    }
  }, [key]);

  return [value, setStickyValue];
}

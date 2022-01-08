<template>
  <documentation-article>
    <documentation-section :type="sectionType">
      <template v-slot:title>Graphic</template>

      <documentation-section :type="subSectionType">
        <template v-slot:title>Giyu Tomioka & Sabito Chibi Arts</template>

        <base-list>
          <base-list-item>
            Reddit
            <br />
            <base-link
              destination="https://www.reddit.com/user/yang_rero/"
              target="_blank"
            >
              <code-text>https://www.reddit.com/user/yang_rero/</code-text>
            </base-link>
          </base-list-item>
          <base-list-item>
            Facebook
            <br />
            <base-link
              destination="https://www.facebook.com/yangartworks/"
              target="_blank"
            >
              <code-text>https://www.facebook.com/yangartworks/</code-text>
            </base-link>
          </base-list-item>
          <base-list-item>
            Instagram
            <br />
            <base-link
              destination="https://www.instagram.com/yangartworks/"
              target="_blank"
            >
              <code-text>https://www.instagram.com/yangartworks/</code-text>
            </base-link>
          </base-list-item>
          <base-list-item>
            Yangartworks
            <br />
            <base-link
              destination="https://www.redbubble.com/i/sticker/Sweet-stuff-set-by-Yangartworks/87180184.EJUG5"
              target="_blank"
            >
              <code-text
                >https://www.redbubble.com/i/sticker/Sweet-stuff-set-by-Yangartworks/87180184.EJUG5</code-text
              >
            </base-link>
          </base-list-item>
        </base-list>
      </documentation-section>
    </documentation-section>

    <documentation-section :type="sectionType">
      <template v-slot:title>Articles list</template>

      <documentation-section :type="subSectionType">
        <template v-slot:title
          >Characters, Abilities & Blood Demon Arts</template
        >

        <base-list>
          <base-list-item
            v-for="(character, index) in charactersUrsl"
            :key="index"
          >
            {{ `${character.name}:` }}
            <br />
            <base-link :destination="character.url" target="_blank">
              <code-text>{{ character.url }} </code-text>
            </base-link>
          </base-list-item>
        </base-list>
      </documentation-section>

      <documentation-section :type="subSectionType">
        <template v-slot:title
          >Breathing Styles & Breathing Techniques</template
        >

        <base-list>
          <base-list-item
            v-for="(breathingStyle, index) in breathingStylesUrls"
            :key="index"
          >
            {{ `${breathingStyle.name}:` }}
            <base-link :destination="breathingStyle.url" target="_blank">
              <br />
              <code-text>{{ breathingStyle.url }} </code-text>
            </base-link>
          </base-list-item>
        </base-list>
      </documentation-section>

      <documentation-section :type="subSectionType">
        <template v-slot:title>Affiliations</template>

        <base-list>
          <base-list-item
            v-for="(affiliation, index) in affiliationsUrls"
            :key="index"
          >
            {{ `${affiliation.name}:` }}
            <br />
            <base-link :destination="affiliation.url" target="_blank">
              <code-text>{{ affiliation.url }} </code-text>
            </base-link>
          </base-list-item>
        </base-list>
      </documentation-section>
    </documentation-section>
  </documentation-article>
</template>

<script>
import { section } from "@/helpers/mixins";
import charactersUrlsJson from "@/data/character-urls.json";
import breathingStyleUrlsJson from "@/data/breathing-style-urls.json";
import affiliationUrlsJson from "@/data/affiliation-urls.json";

import DocumentationArticle from "@/primitives/DocumentationArticle.vue";
import DocumentationSection from "@/components/DocumentationSection.vue";
import CodeText from "@/primitives/CodeText.vue";
import BaseList from "@/primitives/BaseList.vue";
import BaseListItem from "@/primitives/BaseListItem.vue";
import BaseLink from "@/primitives/BaseLink.vue";

export default {
  name: "ReferencesRegister",
  mixins: [section],
  components: {
    DocumentationArticle,
    DocumentationSection,
    CodeText,
    BaseList,
    BaseListItem,
    BaseLink,
  },
  computed: {
    charactersUrsl() {
      return this.jsonDecode(charactersUrlsJson.data);
    },
    breathingStylesUrls() {
      return this.jsonDecode(breathingStyleUrlsJson.data);
    },
    affiliationsUrls() {
      return this.jsonDecode(affiliationUrlsJson.data);
    },
  },
  methods: {
    jsonDecode: (json) => JSON.parse(JSON.stringify(json)),
  },
};
</script>
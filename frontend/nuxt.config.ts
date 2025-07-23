// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  modules: ['@nuxt/eslint'],
  runtimeConfig: {
    public: {
      apiBaseUrl: process.env.NODE_ENV === 'production'
          ? '/api'
    : 'http://localhost:8000'
}
}
})

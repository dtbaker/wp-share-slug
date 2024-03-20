# WP Share Post Slug Plugin

- Just testing some things out.

## Getting started:

```
docker-compose up
```

1. Visit http://localhost:8080/wp-admin/ and login with `admin / admin`
2. Then activate the sample plugins.
3. Set a custom post structure to `/articles/%postname%/` in http://localhost:8080/wp-admin/options-permalink.php
4. Create a couple of sample blog posts
5. Ensure they are visible on the front end at the expected urls
6. e.g. http://localhost:8080/articles/test-new-post-1/
7. Create a couple of "Articles" (the new admin area created by the sample plugin)
8. Notice they are visible at the same `/articles/xxxxx/` URL structure, the same as normal blog posts.

